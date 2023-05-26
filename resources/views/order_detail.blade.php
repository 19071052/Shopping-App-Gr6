<x-app-layout>
    
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>SB Admin 2 - Tables</title>
    
        <!-- Custom fonts for this template -->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    
        <!-- Custom styles for this page -->
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    </head>
    
    <body id="page-top">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Order Detail
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Quantity </th>
                                <th>Price</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($order_detail as $o)
                            <tr>
                                
                                <td>{{ $o->name }}</td>
                                <td><img style="width: 65px;height: 70px;" src="../images/{{$o->images}}" alt=""></td>
                                <td>{{ $o->quantity }}</td>
                                <td>${{number_format($o->quantity* $o->price, 0, ',', '.')}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>
    
        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
    
    </body>
    </x-app-layout>
    