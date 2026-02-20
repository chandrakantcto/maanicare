@extends('layouts.admin')

@section('page-title')
    View Project
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Project Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-edit-box-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th width="180">ID</th>
                                <td>{{ $project->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $project->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $project->slug }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $project->category?->name ?? '—' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge bg-{{ $project->status == 'Active' ? 'success' : 'secondary' }}-subtle text-{{ $project->status == 'Active' ? 'success' : 'secondary' }}">
                                        {{ $project->status }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $project->description ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Sector</th>
                                <td>{{ $project->sector ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{ $project->location ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Area (Sq. Ft.)</th>
                                <td>{{ $project->area_sqft ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Area Display</th>
                                <td>{{ $project->area_display ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Special Features</th>
                                <td>{{ $project->special_features ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Key Highlights</th>
                                <td>{{ $project->key_highlights ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Services</th>
                                <td>
                                    @if ($project->services && count($project->services))
                                        <ul class="mb-0 ps-3">
                                            @foreach($project->services as $s)
                                                <li>{{ $s }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Featured</th>
                                <td>{{ $project->is_featured ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Sort Order</th>
                                <td>{{ $project->sort_order }}</td>
                            </tr>
                            <tr>
                                <th>Hero Image</th>
                                <td>
                                    @if ($project->hero_image)
                                        <img src="{{ asset('storage/' . $project->hero_image) }}" alt="" class="rounded" style="max-height: 120px;">
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Gallery Images</th>
                                <td>
                                    @if ($project->images->count())
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach($project->images as $img)
                                                <div>
                                                    <img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->caption }}" class="rounded" style="max-height: 80px;">
                                                    @if ($img->caption)
                                                        <small class="d-block">{{ Str::limit($img->caption, 30) }}</small>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $project->created_at?->format('M d, Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $project->updated_at?->format('M d, Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
