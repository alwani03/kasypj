<div class="row align-items-center">
    <a href="{{route('transaction.show',[$id])}}"
        class="btn btn-info btn-sm shadow-sm"
        data-placement="top"
        title="Detail">
        <i class="fa fa-eye"></i>
    </a>
    &nbsp;
    <a href="{{route('transaction.edit',[$id])}}"
        class="btn btn-success btn-sm shadow-sm"
        data-placement="top"
        title="Edit">
        <i class="fa fa-pen"></i>
    </a>
    &nbsp;
    <a href="{{route('transaction.destroy',[$id])}}"
        class="btn btn-danger btn-sm shadow-sm delete-data"
        data-placement="top"
        title="Delete">
        <i class="fa fa-times"></i>
    </a>
</div>
