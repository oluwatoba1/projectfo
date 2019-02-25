@extends('layouts.app')

@section('title')
    <a class="navbar-brand" href="/income">Income Log</a>
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="card">
                        <div class="header">
                            @if(auth()->user()->role == 'supervisor')
                                <a href="/supervisor/income/create" class="btn btn-primary">Log Income</a>
                            @elseif(auth()->user()->role == 'cashier')
                                <a href="/cashier/income/create" class="btn btn-primary">Log Income</a>
                            @endif
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        @if(auth()->user()->role == 'supervisor')
                                            <th>Cashier's Name</th>
                                        @endif
                                        <th>Amount</th>
                                        <th>Description</th>
                                        @if(auth()->user()->role == 'supervisor')
                                            <th>Actions(Edit/Delete)</th>
                                            @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($incomes as $income)
                                    <tr>
                                       @if(auth()->user()->role == 'supervisor')
                                            <td>{{ $income->user->name }}</td>
                                        @endif
                                        <td>{{ $income->amount }}</td>
                                        <td>{{ $income->description }}</td>
                                           @if(auth()->user()->role == 'supervisor')
                                               <td>
                                                   <a class="btn btn-primary" href="/supervisor/income/{{ $income->id }}/edit">
                                                       <i class="ti-pencil"></i>
                                                   </a>

                                                   <form id="delete-form" action="/supervisor/income/{{ $income->id }}" method="POST">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button class="btn btn-primary" type="submit">
                                                           <i class="ti-trash"></i>
                                                       </button>
                                                   </form>
                                               </td>
                                           @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection