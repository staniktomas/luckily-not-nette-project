<button class="btn btn-primary pull-right">
	Back to invoices
</button>

<div>

	<h2>Invoice 123</h2>

	<div class="form-group">
		<label>Customer:</label>

		<select class="form-control">
			<option value="">(choose)</option>
			<option value="123">
				Meno Cloveka
			</option>
		</select>

		<br>
		<button class="btn btn-primary">
			+ New customer
		</button>		
		<div class="well">
			<label>Name:</label>
			<input>
			<button>Add customer</button>
			<button>Cancel</button>
		</div>
	</div>

	<h4>Products:</h4>

	<table class="table">
		<thead>
		<tr>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>&nbsp;</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Mlieko</td>
			<td>$ 123</td>
			<td>
				<input type="number" min="1" class="form-control">
			</td>
			<td>
				<button class="btn btn-danger">
					x
				</button>
			</td>
		</tr>
		</tbody>
	</table>

	<div class="form-group">
		<div class="form-inline">
			<button class="btn btn-primary">
				+ Add Product
			</button>
			<select class="form-control">
				<option value="">(choose)</option>
				<option value="123">
					Mlieko
				</option>
			</select>

			<br>
			<br>
			<button class="btn btn-primary">
				+ Create new product
			</button>		
			<div class="well">
				<label>Name:</label>
				<input>
				<label>Price:</label>
				<input>
				<button>Create product</button>
				<button>Cancel</button>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Discount (%):</label>
		<input type="number" class="form-control">
	</div>

	<div class="form-group">
		<label>Total:</label>
		<label class="form-control">
			$ 990
		</label>
	</div>

	<br><br><br><br><br>
</div>

