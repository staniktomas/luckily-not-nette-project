@include('app')
<a class="btn btn-primary pull-right" href="{{route('invoice.index')}}">
    Back to invoices
</a>

<form method="post" action="{{route('invoice.store')}}">
    @csrf
    <h2>Create Invoice</h2>
    <div class="form-group">
        <label>Customer:</label>
        <select name="customer_id" required class="form-control">
            <option value="">(choose)</option>
            @foreach($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->name}}</option>
            @endforeach
        </select>
    </div>

    <h4>Products:</h4>

    <table id="productTable" class="table hidden">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <div class="form-group">
        <div class="form-inline">
            <button type="button" id="addProductButton" class="btn btn-primary">
                + Add Product
            </button>
            <select id="productSelect" class="form-control">
                <option value="">(choose)</option>
                @foreach($products as $product)
                    <option value="{{$product->id}}" data-price="{{$product->price}}">
                        {{$product->name}}
                    </option>
                @endforeach
            </select>

            <br>
        </div>
    </div>

    <div class="form-group">
        <label>Discount (%):</label>
        <input name="discount" id="discount" type="number" min="0" max="100" value="0" class="form-control">
    </div>

    <div class="form-group">
        <label>Total:</label>
        <input name="total" id="total" class="form-control">
    </div>

    <input class="btn btn-primary" value="Save" type="submit">
</form>

