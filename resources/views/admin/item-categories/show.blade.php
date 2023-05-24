@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <span class="crud-item-list">
                View Item Category
            </span>
        </div>
        {{-- {{ trans('global.permission.title_singular') }} {{ trans('global.list') }} --}}
        
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        Item Category Name
                    </th>
                    <td>
                        {{ $item_category->item_category_name }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row mt-3">
            <div class="col">
                <a href="{{ route('admin.item-categories.index') }}">
                    <button class="btn btn-danger">
                        Back
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection