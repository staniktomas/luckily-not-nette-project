<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(): View
    {
        $invoices = Invoice::all();

        return view('app.invoices')->with(compact('invoices'));
    }

    public function create(): View
    {
        $customers = Customer::orderBy('name')->get();
        $products = Product::orderBy('name')->get();

        return view('app.invoiceCreate')->with(compact('customers', 'products'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate(['customer_id' => 'required', 'product' => 'required', 'discount' => 'required']);
        $invoice = Invoice::create($request->input());
        $invoice->invoiceItems()->createMany($request->input('product'));
        return redirect()->route('invoice.index');
    }

    public function destroy($id): RedirectResponse
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->invoiceItems()->delete();
        $invoice->delete();
        return redirect()->route('invoice.index');
    }
}
