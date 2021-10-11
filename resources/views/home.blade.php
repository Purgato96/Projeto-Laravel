@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pesquisa com Regex') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="card-body">
                            <form method="POST" action="{{ route('search') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Modelo:') }}</label>

                                    <select name="search" id="search">
                                        <option value="selecione">Selecione</option>
                                        <option value="audi">AUDI</option>
                                        <option value="bmw">BMW</option>
                                        <option value="chery">CHERY</option>
                                        <option value="chevrolet">Chevrolet</option>
                                        <option value="citroen">Citroën</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="ford">Ford</option>
                                        <option value="honda">Honda</option>
                                        <option value="hyundai">Hyundai</option>
                                        <option value="jac">JAC</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="kia-motors">Kia Motors</option>
                                        <option value="land-rover">Land Rover</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="mini">Mini</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="outros">Outros</option>
                                        <option value="peugeot">Peugeot</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="volkswagen">Volkswagen</option>
                                    </select>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Pesquisar') }}
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
