@extends('layouts.master')

@section('title', 'Budget Tracker')

@section('content')
    <main class="mx-auto px-80 py-20">
        <div class="grid grid-col-1">
            <h1 class="text-2xl">Wallets</h1>
        </div>

        <div class="grid grid-cols-3 gap-4 mt-4">
            <div class="dark:bg-gray-700 bg-gray-50 rounded transition duration-500 transform hover:-translate-y-1 shadow-lg cursor-pointer">
                <div class=" flex items-start justify-start content-center items-center space-x-2 p-6">
                    <i class="fa fa-credit-card fa-lg dark:text-white pt-1.5"></i>
                    <div class="pl-4">
                        <p class="dark:text-white text-xl">Wallet</p>
                        <p class="dark:text-white text-sm text-gray-400">Cash</p>
                        <p class="dark:text-white text-green-500">LKR 10,000.01</p>
                    </div>
                </div>
            </div>

            <div class="dark:bg-gray-700 bg-gray-50 rounded transition duration-500 transform hover:-translate-y-1 shadow-lg cursor-pointer">
                <div class=" flex justify-start content-center items-center space-x-2 p-6">
                    <i class="fa fa-credit-card fa-lg dark:text-white pt-1.5"></i>
                    <div class="pl-4">
                        <p class="dark:text-white text-xl">Bank of Ceylon</p>
                        <p class="dark:text-white text-sm text-gray-400">Cash</p>
                        <p class="dark:text-white text-green-500">LKR 10,000.01</p>
                    </div>
                </div>
            </div>

            <div class="dark:bg-gray-700 bg-gray-50 rounded transition duration-500 transform hover:-translate-y-1 shadow-lg cursor-pointer">
                <div class=" flex justify-start items-center content-center space-x-2 p-6">
                    <i class="fa fa-credit-card fa-lg dark:text-white pt-1.5"></i>
                    <div class="pl-4">
                        <p class="dark:text-white text-xl">Nation Trust Bank</p>
                        <p class="dark:text-white text-sm text-gray-400">Cash</p>
                        <p class="dark:text-white text-green-500">LKR 10,000.01</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 mt-16">
            <h1 class="text-2xl">Overview</h1>
        </div>

        <div class="grid grid-cols-3 mt-8">
            <input type="datetime-local" name="date" id="date" class="col-start-3 shadow border appearance-none rounded py-2 px-3 text-gray-800">
        </div>

        <div class="grid grid-cols-1 mt-12 gap-12">
            <div class="dark:bg-gray-700 bg-gray-50 rounded shadow-lg p-6">
                <div class="flex justify-between">
                    <p class="dark:text-white text-xl">Filter</p>
                    <a href="#" class="dark:text-white text-gray-500 text-lg">Reset filter</a>
                </div>


            </div>
        </div>

        <div class="grid grid-cols-3 mt-12 gap-12">
            <div class="dark:bg-gray-700 bg-gray-50 rounded shadow-lg p-6">
                <p class="dark:text-white text-xl">Total Balance</p>
                <p class="dark:text-white text-green-500 pt-3 text-lg">LKR 10,000.01</p>
            </div>

            <div class="dark:bg-gray-700 bg-gray-50 rounded shadow-lg p-6">
                <p class="dark:text-white text-xl">Total Income</p>
                <p class="dark:text-white text-green-500 pt-3 text-lg">LKR 10,000.01</p>
            </div>

            <div class="dark:bg-gray-700 bg-gray-50 rounded shadow-lg p-6">
                <p class="dark:text-white text-xl">Total Expense</p>
                <p class="dark:text-white text-green-500 pt-3 text-lg">LKR 10,000.01</p>
            </div>
        </div>
    </main>
@endsection
