<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wordle-By-GK</title>
    <link rel="stylesheet" href="wordle.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <section>
        <div class="container">
            <h1 class="title">Wordle</h1>
            <pre>Guess the word</pre>
            <div id="otp-form-0" class="otp-form">
                <input type="text" id="otp-input-00" class="otp-input" maxlength="1" />
                <input type="text" id="otp-input-01" class="otp-input" maxlength="1" />
                <input type="text" id="otp-input-02" class="otp-input" maxlength="1" />
                <input type="text" id="otp-input-03" class="otp-input" maxlength="1" />
                <input type="text" id="otp-input-04" class="otp-input" maxlength="1" />
            </div>

            <div id="otp-form-0" class="otp-form">
                <input type="text" id="otp-input-10" class="otp-input-1" maxlength="1" />
                <input type="text" id="otp-input-11" class="otp-input-1" maxlength="1" />
                <input type="text" id="otp-input-12" class="otp-input-1" maxlength="1" />
                <input type="text" id="otp-input-13" class="otp-input-1" maxlength="1" />
                <input type="text" id="otp-input-14" class="otp-input-1" maxlength="1" />
            </div>
            <div id="otp-form-0" class="otp-form">
                <input type="text" id="otp-input-20" class="otp-input-2" maxlength="1" />
                <input type="text" id="otp-input-21" class="otp-input-2" maxlength="1" />
                <input type="text" id="otp-input-22" class="otp-input-2" maxlength="1" />
                <input type="text" id="otp-input-23" class="otp-input-2" maxlength="1" />
                <input type="text" id="otp-input-24" class="otp-input-2" maxlength="1" />
            </div>
            <div id="otp-form-0" class="otp-form">
                <input type="text" id="otp-input-30" class="otp-input-3" maxlength="1" />
                <input type="text" id="otp-input-31" class="otp-input-3" maxlength="1" />
                <input type="text" id="otp-input-32" class="otp-input-3" maxlength="1" />
                <input type="text" id="otp-input-33" class="otp-input-3" maxlength="1" />
                <input type="text" id="otp-input-34" class="otp-input-3" maxlength="1" />
            </div>
            <div id="otp-form-0" class="otp-form">
                <input type="text" id="otp-input-40" class="otp-input-4" maxlength="1" />
                <input type="text" id="otp-input-41" class="otp-input-4" maxlength="1" />
                <input type="text" id="otp-input-42" class="otp-input-4" maxlength="1" />
                <input type="text" id="otp-input-43" class="otp-input-4" maxlength="1" />
                <input type="text" id="otp-input-44" class="otp-input-4" maxlength="1" />
            </div>
            <!-- Repeat similar forms for more if needed -->
            <button id="refreshButton">Get new word</button>
        </div>
    </section>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/ajax.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.otp-form');

            forms.forEach((form, index) => {
                const inputs = form.querySelectorAll('input');

                inputs.forEach((input, inputIndex) => {
                    input.addEventListener('input', function() {
                        if (this.value.length === 1) {
                            if (inputIndex < inputs.length - 1) {
                                inputs[inputIndex + 1].focus();
                            }
                        }
                    });

                    input.addEventListener('keydown', function(event) {
                        if (event.key === 'Backspace' && inputIndex > 0 && this.value
                            .length === 0) {
                            inputs[inputIndex - 1].focus();
                        }
                    });
                });

                if (index !== 0) {
                    inputs.forEach(input => {
                        input.disabled = true;
                    });
                }
            });
        });
        document.getElementById('refreshButton').addEventListener('click', function() {
            location.reload();
        });
    </script>
</body>

</html>
