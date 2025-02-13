<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Philippine Mobile Number Generator & Validator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="https://rootscratch.com/helloworld/assets/img/favicon.png" type="image/x-icon">
    <meta name="description" content="Philippine Mobile Number Validator is a tool that helps you identify the network operator of a mobile number. It can determine whether the number belongs to Smart, TNT, Globe, TM, or DITO.">
    <meta name="keywords" content="Philippine Mobile Number Validator, Smart, TNT, Globe, TM, DITO, mobile network operator, phone number validation">
    <meta property="og:title" content="Philippine Mobile Number Generator & Validator">
    <meta property="og:description" content="Identify the network operator of a Philippine mobile number.">
    <meta property="og:image" content="https://phnumber.rootscratch.com/image.png">
    <meta property="og:url" content="https://phnumber.rootscratch.com/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Philippine Mobile Number Generator & Validator">
    <meta name="twitter:description" content="Identify the network operator of a Philippine mobile number.">
    <meta name="twitter:image" content="https://phnumber.rootscratch.com/image.png">
</head>

<body>

    <div class="p-3 bg-dark mb-5">
        <div class="text-center d-block">
            <img src="rootscratch.svg" alt="Rootscratch Logo" class="img-fluid mx-auto d-inline-block mb-0" style="width: 140px;">
        </div>
        <h2 class="text-center text-white ps-5 pe-5 mb-3"><span class="">Philippine</span> Mobile Number Generator & Validator</h2>
    </div>

    <div class="container">

        <h3>Verify Mobile Network Operator</h3>
        <p>Enter a mobile number to identify its network operator. This tool helps you determine whether the number belongs to Smart, TNT, Globe, TM, or DITO. Simply input the mobile number in the provided field and click on the "Validate" button to get the results. This can be particularly useful for ensuring that you are contacting the correct network or for any other verification purposes.</p>

        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form id="form" method="POST" action="">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number List <span class="badge bg-danger">Max : 1000</span></label>
                                <textarea class="form-control" name="phone_numbers" rows="10" placeholder="091234567890" style="resize: none; outline: none; box-shadow: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Validate</button>
                            <button type="button" id="generateRandom" class="btn btn-dark w-100 mt-2">Generate Random</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>Smart / TNT <span class="badge bg-dark" id="smartCount">0</span></h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="smartNumbers" rows="10" placeholder="091234567890" style="resize: none; outline: none; box-shadow: none;"></textarea>
                        </div>
                        <button class="btn btn-warning w-100 mt-2" onclick="copyToClipboard('smartNumbers')">Copy Clipboard</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>Globe / TM <span class="badge bg-dark" id="globeCount">0</span></h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="globeNumbers" rows="10" placeholder="091234567890" style="resize: none; outline: none; box-shadow: none;"></textarea>
                        </div>
                        <button class="btn btn-primary w-100 mt-2" onclick="copyToClipboard('globeNumbers')">Copy Clipboard</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>DITO <span class="badge bg-dark" id="ditoCount">0</span></h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="ditoNumbers" rows="10" placeholder="091234567890" style="resize: none; outline: none; box-shadow: none;"></textarea>
                        </div>
                        <button class="btn btn-danger w-100 mt-2" onclick="copyToClipboard('ditoNumbers')">Copy Clipboard</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h3 class="mt-5">Check Mobile Number Activity</h3>
        <p>
            Use this section to verify if a mobile number is currently active.
            We utilize the GCash API and an online database to determine the status of the number.
            This feature is intended for marketing and educational purposes only.
            Please ensure to send requests at intervals of at least 15 seconds to avoid rate limiting.
            We are not responsible for any malicious activity by users of this tool.
        </p>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">

                            <label for="">Enter API Key</label>
                            <input type="text" class="form-control mb-3" id="api_key" value="demo">

                            <label for="phone" class="form-label">Phone Number List <span class="badge bg-danger">Max : 1000</span></label>
                            <textarea class="form-control" id="activity_phone_numbers" rows="10" placeholder="091234567890" style="resize: none; outline: none; box-shadow: none;"></textarea>
                        </div>
                        <button type="button" id="validateActivity" class="btn btn-success mb-3 w-100">Validate</button>
                        <ul>
                            <li><strong>DEMO</strong> - 15 Seconds Waiting for Request</li>
                            <li>Contact Us If You want to get an API key</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>Live Mobile Number <span class="badge bg-dark" id="liveCount">0</span></h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="liveNumbers" rows="10" placeholder="091234567890" style="resize: none; outline: none; box-shadow: none;"></textarea>
                        </div>
                        <button class="btn btn-primary w-100 mt-2" onclick="copyToClipboard('liveNumbers')">Copy Clipboard</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5>Request Logs</h5>
                    </div>
                    <div class="card-body" style="height: 350px; overflow-y: auto;">
                        <pre id="requestLogs"></pre>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="text-center bg-dark text-white p-3 mt-5">
            <p class="mb-0">Developed by <a href="https://rootscratch.com" class="text-white text-decoration-none">Rootscratch</a></p>
        </div>
    </footer>

    <script>
        function copyToClipboard(elementId) {
            var copyText = document.getElementById(elementId);
            copyText.select();
            document.execCommand("copy");
        }

        document.getElementById('generateRandom').addEventListener('click', function() {
            var randomNumbers = '';
            for (var i = 0; i < 1000; i++) {
                randomNumbers += '09' + Math.floor(Math.random() * 1000000000).toString().padStart(9, '0') + '\n';
            }
            document.querySelector('textarea[name="phone_numbers"]').value = randomNumbers.trim();
        });

        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            var phoneNumbers = document.querySelector('textarea[name="phone_numbers"]').value.split('\n').filter(Boolean);
            var smartNumbers = [];
            var globeNumbers = [];
            var ditoNumbers = [];

            phoneNumbers.forEach(function(number) {
                if (/^(0813|0907|0908|0909|0910|0911|0912|0913|0914|0918|0919|0920|0921|0928|0929|0930|0938|0939|0940|0946|0947|0948|0949|0950|0951|0961|0963|0968|0969|0970|0981|0989|0992|0998|0999)/.test(number)) {
                    smartNumbers.push(number);
                } else if (/^(0817|0904|0905|0906|0915|0916|0917|0926|0927|0935|0936|0937|0945|0953|0954|0955|0956|0965|0966|0967|0975|0977|0978|0979|0994|0995|0996|0997)/.test(number)) {
                    globeNumbers.push(number);
                } else if (/^(0895|0896|0897|0898|0991|0992|0993|0994)/.test(number)) {
                    ditoNumbers.push(number);
                }
            });

            document.getElementById('smartNumbers').value += (document.getElementById('smartNumbers').value ? '\n' : '') + smartNumbers.filter(Boolean).join('\n');
            document.getElementById('globeNumbers').value += (document.getElementById('globeNumbers').value ? '\n' : '') + globeNumbers.filter(Boolean).join('\n');
            document.getElementById('ditoNumbers').value += (document.getElementById('ditoNumbers').value ? '\n' : '') + ditoNumbers.filter(Boolean).join('\n');

            document.getElementById('smartCount').innerText = document.getElementById('smartNumbers').value.split('\n').length;
            document.getElementById('globeCount').innerText = document.getElementById('globeNumbers').value.split('\n').length;
            document.getElementById('ditoCount').innerText = document.getElementById('ditoNumbers').value.split('\n').length;

            // Clear the phone number list
            document.querySelector('textarea[name="phone_numbers"]').value = '';
        });

        document.getElementById('validateActivity').addEventListener('click', function() {
            var phoneNumbers = document.querySelector('#activity_phone_numbers').value.split('\n').filter(Boolean);
            var apiKey = document.getElementById('api_key').value;
            var requestLogs = document.getElementById('requestLogs');
            var liveNumbers = document.getElementById('liveNumbers');

            function checkNumber(index) {
                if (index >= phoneNumbers.length) return;

                var number = phoneNumbers[index];
                var url = `https://gxchange-verify.rootscratch.com/${number}/${apiKey}`;

                fetch(url, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then(data => {
                        requestLogs.innerText = `Checked ${number}: ${JSON.stringify(data)}\n` + requestLogs.innerText;

                        if (data.success) {
                            liveNumbers.value += (liveNumbers.value ? '\n' : '') + number;
                            document.getElementById('liveCount').innerText = liveNumbers.value.split('\n').length;
                        }

                        checkNumber(index + 1);
                    })
                    .catch(error => {
                        requestLogs.innerText = `Error checking ${number}: ${error}\n` + requestLogs.innerText;

                        checkNumber(index + 1);
                    });
            }

            checkNumber(0);
        });
    </script>

</body>

</html>