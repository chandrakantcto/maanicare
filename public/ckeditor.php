<?php
// Single-file PHP Weather App with Bootstrap 5
// Current context: February 2026

// ────────────────────────────────────────────────
//  CONFIGURATION
// ────────────────────────────────────────────────

$OPENWEATHER_API_KEY = "39d89bfbe8f82c108681a27f939e9d0b"; // ← Replace with your free key from https://home.openweathermap.org/api_keys

$GEO_API_FALLBACK = true;
$DEFAULT_CITY_IF_FAIL = "London";

// ────────────────────────────────────────────────
//  FUNCTIONS
// ────────────────────────────────────────────────

function getClientIP() {
    $keys = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'];
    foreach ($keys as $key) {
        if (array_key_exists($key, $_SERVER) && filter_var($_SERVER[$key], FILTER_VALIDATE_IP)) {
            return $_SERVER[$key];
        }
    }
    return '127.0.0.1';
}

function getLocationByIP($ip) {
    global $GEO_API_FALLBACK;
    if (!$GEO_API_FALLBACK) return null;

    $url = "https://ipapi.co/{$ip}/json/";
    $json = @file_get_contents($url);
    if (!$json) return null;

    $data = json_decode($json, true);
    if (json_last_error() !== JSON_ERROR_NONE || empty($data['city'])) return null;

    return [
        'city'    => $data['city'] ?? '',
        'country' => $data['country_name'] ?? '',
        'lat'     => $data['latitude'] ?? null,
        'lon'     => $data['longitude'] ?? null
    ];
}

function getWeather($city, $apiKey) {
    if (empty($apiKey)) return ['error' => 'API key is missing'];

    $city = urlencode(trim($city));
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";

    $json = @file_get_contents($url);
    if ($json === false) return ['error' => 'Could not connect to weather service'];

    $data = json_decode($json, true);
    if (json_last_error() !== JSON_ERROR_NONE) return ['error' => 'Invalid API response'];

    if (!empty($data['cod']) && $data['cod'] != 200) {
        return ['error' => $data['message'] ?? 'City not found'];
    }

    return [
        'city'        => $data['name'] ?? 'Unknown',
        'country'     => $data['sys']['country'] ?? '',
        'temp'        => round($data['main']['temp'] ?? 0),
        'feels_like'  => round($data['main']['feels_like'] ?? 0),
        'description' => ucfirst($data['weather'][0]['description'] ?? '—'),
        'icon'        => $data['weather'][0]['icon'] ?? '01d',
        'humidity'    => $data['main']['humidity'] ?? '?',
        'wind_speed'  => round(($data['wind']['speed'] ?? 0) * 3.6, 1), // m/s → km/h
        'pressure'    => $data['main']['pressure'] ?? '?',
        'sunrise'     => isset($data['sys']['sunrise']) ? date('H:i', $data['sys']['sunrise']) : '?',
        'sunset'      => isset($data['sys']['sunset'])  ? date('H:i', $data['sys']['sunset'])  : '?',
    ];
}

// ────────────────────────────────────────────────
//  LOGIC
// ────────────────────────────────────────────────

$weather = null;
$error = null;
$searched_city = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['city'])) {
    $searched_city = trim($_GET['city']);
    $weather = getWeather($searched_city, $OPENWEATHER_API_KEY);
    if (isset($weather['error'])) $error = $weather['error'];
} else {
    $ip = getClientIP();
    $geo = getLocationByIP($ip);

    $city_to_use = $geo['city'] ?? $DEFAULT_CITY_IF_FAIL;
    $searched_city = $geo['city'] ?? $DEFAULT_CITY_IF_FAIL;

    $weather = getWeather($city_to_use, $OPENWEATHER_API_KEY);
    if (isset($weather['error'])) $error = $weather['error'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Weather App</title>

  <!-- Bootstrap 5.3.8 CDN (latest stable as of Feb 2026) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">

  <style>
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      min-height: 100vh;
      padding: 2rem 1rem;
    }
    .card-weather {
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.25);
      border-radius: 1rem;
      color: white;
    }
    .temp {
      font-size: 5.5rem;
      font-weight: 300;
      line-height: 1;
    }
    .search-form .btn {
      min-width: 100px;
    }
    footer {
      margin-top: 3rem;
      opacity: 0.8;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<div class="container" style="max-width: 540px;">

  <h1 class="text-center mb-4 fw-light">Weather</h1>

  <form method="get" class="search-form mb-4">
    <div class="input-group input-group-lg">
      <input type="text" 
             class="form-control" 
             name="city" 
             value="<?= htmlspecialchars($searched_city) ?>" 
             placeholder="Enter city name..." 
             required 
             autofocus>
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
  </form>

  <?php if (isset($error)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= htmlspecialchars($error) ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php elseif ($weather && !isset($weather['error'])): ?>
    <div class="card card-weather shadow-lg">
      <div class="card-body text-center p-4 p-md-5">

        <img src="https://openweathermap.org/img/wn/<?= $weather['icon'] ?>@4x.png" 
             alt="Weather icon" 
             class="mb-3" 
             style="width:120px; height:120px;">

        <div class="temp"><?= $weather['temp'] ?><span class="fs-3">°C</span></div>

        <h3 class="card-title mt-2 mb-1"><?= htmlspecialchars($weather['description']) ?></h3>

        <h5 class="mb-4">
          <?= htmlspecialchars($weather['city']) ?>
          <?php if ($weather['country']): ?>
            <span class="text-white-75">, <?= $weather['country'] ?></span>
          <?php endif; ?>
        </h5>

        <div class="row row-cols-2 g-4 text-start">
          <div class="col">
            <strong>Feels like</strong><br>
            <?= $weather['feels_like'] ?> °C
          </div>
          <div class="col">
            <strong>Humidity</strong><br>
            <?= $weather['humidity'] ?>%
          </div>
          <div class="col">
            <strong>Wind</strong><br>
            <?= $weather['wind_speed'] ?> km/h
          </div>
          <div class="col">
            <strong>Pressure</strong><br>
            <?= $weather['pressure'] ?> hPa
          </div>
          <div class="col">
            <strong>Sunrise</strong><br>
            <?= $weather['sunrise'] ?>
          </div>
          <div class="col">
            <strong>Sunset</strong><br>
            <?= $weather['sunset'] ?>
          </div>
        </div>

      </div>
    </div>
  <?php endif; ?>

  <footer class="text-center mt-5">
    Powered by OpenWeatherMap • IP geolocation: ipapi.co • Built with Bootstrap 5
  </footer>

</div>

<!-- Bootstrap JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
        crossorigin="anonymous"></script>

</body>
</html>