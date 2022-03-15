<div class="form-group row">
  <label class="col-lg-3 col-form-label"> <a href="/dashboard/dummy/tables/generals/create" target="_blank" class="text-danger font-weight-bold"><u> Table General </u></a></label>
  <div class="col-lg-9">
    {!! Form::select('id_general', dummy_table_generals(), (isset($data->id_general) ? $data->id_general : NULL), ['placeholder' => '- Select Table General -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_general') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Description </label>
  <div class="col-lg-9">
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['id' => 'ex-textarea', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>