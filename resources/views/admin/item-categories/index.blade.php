@extends('layouts.admin')
@section('content')
@can('item_category_create')
    {{-- <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.item-categories.create") }}">
                {{ trans('global.add') }} {{ trans('global.permission.title_singular') }}
                Add Item Category
            </a>
        </div>
    </div> --}}
@endcan
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <span class="crud-item-list">
                Item Category List
            </span>
            <span class="mt-1">
                Total Item Categories = <strong>{{ $data['sum'] }}</strong>
            </span>
            <a class="btn btn-outline-primary" title="Add Item Category" href="{{ route("admin.item-categories.create") }}">
                <i class="fas fa-plus-square"></i>
            </a>
        </div>
        {{-- {{ trans('global.permission.title_singular') }} {{ trans('global.list') }} --}}
        
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable" width="100%">
                <thead>
                    <tr>
                        <th>
                            S.N.
                        </th>
                        <th>
                            {{-- {{ trans('global.permission.fields.title') }} --}}
                            Item Category Name
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['item_categories'] as $key => $item_category)
                        <tr data-entry-id="{{ $item_category->id }}">
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                {{ $item_category->item_category_name ?? '' }}
                            </td>
                            <td>
                                @can('item_category_show')
                                    <a class="btn btn-sm btn-info mx-1 my-1" title="View Item Category" href="{{ route('admin.item-categories.show', $item_category->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                @endcan
                                @can('item_category_edit')
                                    <a class="btn btn-sm btn-success mx-1 my-1" title="Edit Item Category" href="{{ route('admin.item-categories.edit', $item_category->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                @endcan
                                @can('item_category_delete')
                                    <form action="{{ route('admin.item-categories.destroy', $item_category->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {{-- <input type="submit" class="btn btn-sm btn-danger" value='<i class="fas fa-trash"></i>'> --}}
                                        <button class="btn btn-danger btn-sm mx-1 my-1" title="Delete Item Category" type="submit">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent

@endsection