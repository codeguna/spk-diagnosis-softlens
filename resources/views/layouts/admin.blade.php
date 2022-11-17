<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Pakar - Dampak Penggunaan Softlens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
    <script type="text/javascript">
        function d001() {
            document.getElementById("G001").style.display = 'block';
            document.getElementById("G002").style.display = 'block';
            document.getElementById("G003").style.display = 'block';
            document.getElementById("G004").style.display = 'none';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'none';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'none';
        }

        function d002() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'none';
            document.getElementById("G003").style.display = 'block';
            document.getElementById("G004").style.display = 'block';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'block';
            document.getElementById("G007").style.display = 'block';
            document.getElementById("G008").style.display = 'block';
            document.getElementById("G009").style.display = 'block';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'none';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'none';
        }

        function d003() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'none';
            document.getElementById("G003").style.display = 'none';
            document.getElementById("G004").style.display = 'block';
            document.getElementById("G005").style.display = 'block';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'none';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'block';
        }

        function d004() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'none';
            document.getElementById("G003").style.display = 'none';
            document.getElementById("G004").style.display = 'none';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'block';
            document.getElementById("G011").style.display = 'block';
            document.getElementById("G012").style.display = 'block';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'none';
        }

        function d005() {
            document.getElementById("G001").style.display = 'block';
            document.getElementById("G002").style.display = 'block';
            document.getElementById("G003").style.display = 'block';
            document.getElementById("G004").style.display = 'block';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'block';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'none';
            document.getElementById("G013").style.display = 'block';
            document.getElementById("G014").style.display = 'block';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'none';
        }

        function d006() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'none';
            document.getElementById("G003").style.display = 'block';
            document.getElementById("G004").style.display = 'none';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'block';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'block';
            document.getElementById("G013").style.display = 'block';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'block';
        }

        function d007() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'block';
            document.getElementById("G003").style.display = 'none';
            document.getElementById("G004").style.display = 'none';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'none';
            document.getElementById("G013").style.display = 'block';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'none';
            document.getElementById("G016").style.display = 'block';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'block';
        }

        function d008() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'block';
            document.getElementById("G003").style.display = 'none';
            document.getElementById("G004").style.display = 'none';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'block';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'block';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'block';
            document.getElementById("G018").style.display = 'block';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'block';
        }

        function d009() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'block';
            document.getElementById("G003").style.display = 'none';
            document.getElementById("G004").style.display = 'none';
            document.getElementById("G005").style.display = 'none';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'block';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'block';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'block';
            document.getElementById("G018").style.display = 'block';
            document.getElementById("G019").style.display = 'none';
            document.getElementById("G020").style.display = 'none';
            document.getElementById("G021").style.display = 'block';
        }

        function d010() {
            document.getElementById("G001").style.display = 'none';
            document.getElementById("G002").style.display = 'none';
            document.getElementById("G003").style.display = 'none';
            document.getElementById("G004").style.display = 'block';
            document.getElementById("G005").style.display = 'block';
            document.getElementById("G006").style.display = 'none';
            document.getElementById("G007").style.display = 'none';
            document.getElementById("G008").style.display = 'none';
            document.getElementById("G009").style.display = 'none';
            document.getElementById("G010").style.display = 'none';
            document.getElementById("G011").style.display = 'none';
            document.getElementById("G012").style.display = 'none';
            document.getElementById("G013").style.display = 'none';
            document.getElementById("G014").style.display = 'none';
            document.getElementById("G015").style.display = 'block';
            document.getElementById("G016").style.display = 'none';
            document.getElementById("G017").style.display = 'none';
            document.getElementById("G018").style.display = 'none';
            document.getElementById("G019").style.display = 'block';
            document.getElementById("G020").style.display = 'block';
            document.getElementById("G021").style.display = 'none';
        }
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="navbar-brand-full text-center">Sistem Pakar <br />D.P.S</span>
            <span class="navbar-brand-minimized"><i class="fas fa-eye"></i></span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">
            @if (count(config('panel.available_languages', [])) > 1)
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach (config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item"
                                href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }}
                                ({{ $langName }})
                            </a>
                        @endforeach
                    </div>
                </li>
            @endif


        </ul>
    </header>

    <div class="app-body">
        @include('partials.menu')
        <main class="main">


            <div style="padding-top: 20px" class="container-fluid">
                @if (session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if ($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                className: 'btn'
            })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style: 'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [{
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });
    </script>
    @yield('scripts')
</body>

</html>
