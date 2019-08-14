<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- CSRF Token -->
            <meta name="csrf-token" content="RgbMihymDavFMT4UBtWXvkdjUF2sBapEfmM5UN9A">
        
            <title>Laravel</title>
        
            <!-- Scripts -->
            <script src="http://localhost:8000/js/app.js" defer></script>
        
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
            <!-- Styles -->
            <link href="http://localhost:8000/css/app.css" rel="stylesheet">
    </head>
    <body>
            <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="http://localhost:8000">
                                Laravel
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
            
                                </ul>
            
                         
                            </div>
                        </div>
                    </nav>
            
                    <main class="py-4">
                        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Cek ongkir (Rajaongkir)</div>
            
                            <div class="card-body">
                                
                                    <div class="form-group row">
                                            <label for="kota" class="col-md-4 col-form-label text-md-right">Kota asal</label>
                
                                            <div class="col-md-6">
                                                
                                                    <label for="kota" class="col-md-4 col-form-label text-md-right">{{$list->rajaongkir->origin_details->city_name}}</label>
                                                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label for="kota" class="col-md-4 col-form-label text-md-right">Kota tujuan</label>
            
                                        <div class="col-md-6">
                                            
                                                <label for="kota" class="col-md-4 col-form-label text-md-right">{{$list->rajaongkir->destination_details->city_name}}</label>
                                                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            
                                            @foreach($list->rajaongkir->results as $result)
                                            Kurir : {{$result->name}}   <br> 
                                            @foreach($result->costs as $costs )
                                                    Service: {{$costs->service}}
                                                    Description: {{$costs->description}}
                                                    <br>
                                                @foreach($costs->cost as $cost)
                                                    Biaya : {{$cost->value}}
                                                    Estimasi : {{$cost->etd}} hari
                                                    <br>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                            
                                        </div>

                                        
            
                                    
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Cek
                                            </button>
        
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </main>
                </div>
    </body>
</html>