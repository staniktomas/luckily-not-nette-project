@include('app')

<a class="btn btn-primary pull-right" href="{{route('invoice.create')}}">
    + New Invoice
</a>

<h2>Invoices</h2>

<table class="table table-striped invoices">
    <thead>
    <tr>
        <th>Invoice ID</th>
        <th>Name</th>
        <th>Total</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{$invoice->id}}</td>
            <td>{{$invoice->customer->name}}</td>
            <td>$ {{$invoice->total}}</td>
            <td>
                <form method="POST" action="{{route('invoice.destroy',$invoice->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger delete" value="x">
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
