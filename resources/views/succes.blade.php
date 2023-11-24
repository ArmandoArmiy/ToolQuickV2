@if (Session::get('success'))
    <div class="bg-green-100 text-green-700 border border-green-400 rounded p-4 mt-4 text-center ">
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif
@if (Session::get('error'))
    <div class="bg-red-100 text-red-700 border border-red-400 rounded p-4 mt-4 text-center ">
        <strong>{{ Session::get('error') }}</strong>
    </div>
@endif
