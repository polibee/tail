@extends('layouts.default')

@section('title', 'Stark')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">API Response</h1>
        <div class="flex items-center">
            <input type="text" id="domainInput" class="border rounded-l px-4 py-2" placeholder="Enter Domain">
            <button id="fetchButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r">Fetch Data</button>
        </div>
        <pre id="responseData" class="bg-gray-100 p-4"></pre>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var domainInput = document.getElementById('domainInput');
            var fetchButton = document.getElementById('fetchButton');
            var responseData = document.getElementById('responseData');

            fetchButton.addEventListener('click', function () {
                var domain = domainInput.value;

                if (domain) {
                    var url = 'https://api.starknet.id/domain_to_data?domain=' + encodeURIComponent(domain);

                    fetch(url)
                        .then(function (response) {
                            return response.json();
                        })
                        .then(function (data) {
                            responseData.textContent = JSON.stringify(data, null, 2);
                        })
                        .catch(function (error) {
                            console.error(error);
                            responseData.textContent = 'Error occurred while fetching data.';
                        });
                }
            });
        });
    </script>
@endsection
