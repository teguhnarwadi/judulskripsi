<div class="alert alert-danger info" style="display:none;">
    <ul></ul>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Judul</label>
    <div class="col-md-8">
        {!! Form::text('judul', null, ['class' => 'form-control', 'id' => 'judul']) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Deskripsi</label>
    <div class="col-md-8">
        {!! Form::text('deskripsi', null, ['class' => 'form-control', 'id' => 'deskripsi']) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Referensi</label>
    <div class="col-md-8">
        {!! Form::text('referensi', null, ['class' => 'form-control', 'id' => 'referensi']) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Kategori</label>
    <div class="col-md-8">
        {!! Form::text('kategori', null, ['class' => 'form-control', 'id' => 'kategori']) !!}
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {!! Form::button('Save', array('class' => 'btn-primary save')) !!}
            {!! Form::hidden('id', null, ['id' => 'id']) !!}
        </div>
    </div>
</div>