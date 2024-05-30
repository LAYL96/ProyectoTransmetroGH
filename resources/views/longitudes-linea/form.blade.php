<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_linea" class="form-label">Linea</label>
            <select name="id_linea" class="form-control @error('id_linea') is-invalid @enderror" id="id_linea">
                <option value="">Seleccione Linea</option>
                @foreach($linea as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_linea', $longitudesLinea->id_linea) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="longitud_km" class="form-label">Longitud en KM</label>
            <input type="text" name="longitud_km" class="form-control @error('longitud_km') is-invalid @enderror" value="{{ old('longitud_km', $longitudesLinea?->longitud_km) }}" id="longitud_km" placeholder="Longitud Km">
            {!! $errors->first('longitud_km', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>