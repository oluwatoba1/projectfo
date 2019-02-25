<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Http\Requests\ExpenseRequest;
use App\Http\Requests\IncomeRequest;
use App\Income;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'supervisor']);
    }

    public function index()
    {
        //TODO: pluck price by day, month and year on app service provider
        return view('admin.index');
    }

    public function getIncomePage()
    {
        $incomes = Income::latest()->get();
        return view('income.index', compact('incomes'));
    }

    public function createIncomePage()
    {
        return view('income.create');
    }

    public function storeIncome(IncomeRequest $formRequest)
    {
        $formRequest->persist();

        return back();
    }

    public function getIncomeEditPage(Income $income)
    {
        return view('income.edit', compact('income'));
    }

    public function updateIncome(IncomeRequest $formRequest, Request $request, Income $income)
    {
        $income->update($request->all());

        return redirect('/supervisor/income');
    }

    public function deleteIncome(Income $income)
    {
        $income->delete();

        return back();
    }

    public function getExpensePage()
    {
        $expenses = Expense::latest()->get();
        return view('expense.index', compact('expenses'));
    }

    public function createExpensePage()
    {
        return view('expense.create');
    }

    public function storeExpense(ExpenseRequest $formRequest)
    {
        $formRequest->persist();

        return back();
    }

    public function getExpenseEditPage(Expense $expense)
    {
        return view('expense.edit', compact('expense'));
    }

    public function updateExpense(ExpenseRequest $formRequest, Request $request, Expense $expense)
    {
        $expense->update($request->all());

        return redirect('/supervisor/expense');
    }

    public function deleteExpense(Expense $expense)
    {
        $expense->delete();

        return back();
    }

    public function getUserProfile()
    {
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }
    
}
