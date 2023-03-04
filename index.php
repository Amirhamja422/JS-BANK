<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container" style="margin-top:30px;">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <div class="card-body" style="background: thistle;">
                        <h5 class="card-title">DDEPOST</h5>
                        <p class="card-text">$1100S<p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <div class="card-body" style="background: slategray;">
                        <h5 class="card-title">WITHDRAW</h5>
                        <p class="card-text">$4100</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body" style="background: steelblue;">
                        <h5 class="card-title">BALANCE</h5>
                        <p class="card-text">$1223232</p>
                    </div>
                </div>
            </div>


            <div class="container-fluid" style="display: flex;gap: 26px;height: 8rem;width: 64rem;width: 58rem;">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">PLEASE DEPOSIT</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">$</span>
                                <input type="text" class="form-control" placeholder="amount you went to deposit" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary" id="deposit">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">PLEASE WITHDRAW</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">$</span>
                                <input type="text" class="form-control" id="deposit_input" placeholder="amount you went to withdraw" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary" id="withdraw">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


</body>

</html>

<script>

    function getInputValue(input_value){
        const inputField = document.getElementById(input_value);
        const valueText = inputField.value;
        const value = parseFloat(valueText);
        inputField.value ='';
        return value;
    }


    document.getElementById ("withdraw").addEventListener('click',function(){
    //  console.log("Click");
    const amount = getInputValue('deposit_input');
    console.log(amount);


    });


</script>
