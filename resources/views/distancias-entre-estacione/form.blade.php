<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_estacion_origen" class="form-label">Estacion de Origen</label>
            <select name="id_estacion_origen" class="form-control @error('id_estacion_origen') is-invalid @enderror" id="id_estacion_origen">
                <option value="">Seleccione Estacion de Origen</option>
                @foreach($estacion as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_estacion_origen', $distanciasEntreEstacione->id_estacion_origen) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_estacion_origen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_estacion_destino" class="form-label">Estacion de Destino</label>
            <select name="id_estacion_destino" class="form-control @error('id_estacion_destino') is-invalid @enderror" id="id_estacion_destino">
                <option value="">Seleccione Estacion de Destino</option>
                @foreach($estacion as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_estacion_destino', $distanciasEntreEstacione->id_estacion_destino) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_estacion_destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="distancia_km" class="form-label">Distancia en KM</label>
            <input type="number" name="distancia_km" class="form-control @error('distancia_km') is-invalid @enderror" value="{{ old('distancia_km', $distanciasEntreEstacione?->distancia_km) }}" id="distancia_km" placeholder="Distancia Km">
            {!! $errors->first('distancia_km', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>