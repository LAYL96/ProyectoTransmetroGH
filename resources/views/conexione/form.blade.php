<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_estacion_origen" class="form-label">Estacion de Origen</label>
            <select name="id_estacion_origen" class="form-control @error('id_estacion_origen') is-invalid @enderror" id="id_estacion_origen">
                <option value="">Seleccione Estacion de Origen</option>
                @foreach($estacion as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_estacion_origen', $conexione->id_estacion_origen) == $id ? 'selected' : '' }}>
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
                    <option value="{{ $id }}" {{ old('id_estacion_destino', $conexione->id_estacion_destino) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_estacion_destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion_ip" class="form-label">{{ __('Direccion Ip') }}</label>
            <input type="text" name="direccion_ip" class="form-control @error('direccion_ip') is-invalid @enderror" value="{{ old('direccion_ip', $conexione?->direccion_ip) }}" id="direccion_ip" placeholder="Direccion Ip">
            {!! $errors->first('direccion_ip', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puerto" class="form-label">{{ __('Puerto') }}</label>
            <input type="number" name="puerto" class="form-control @error('puerto') is-invalid @enderror" value="{{ old('puerto', $conexione?->puerto) }}" id="puerto" placeholder="Puerto">
            {!! $errors->first('puerto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="protocolo" class="form-label">{{ __('Protocolo') }}</label>
            <input type="text" name="protocolo" class="form-control @error('protocolo') is-invalid @enderror" value="{{ old('protocolo', $conexione?->protocolo) }}" id="protocolo" placeholder="Protocolo">
            {!! $errors->first('protocolo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>