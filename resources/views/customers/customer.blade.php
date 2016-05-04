<!-- <form role="form">
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="umur">Umur:</label>
    <input type="text" class="form-control" id="umur">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="text" class="form-control" id="alamat">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> -->

<table>
  <tr>
    <th>Nama</th>
    <th>Umur</th>
    <th>Alamat</th>
    <th>Nomor Rumah</th>
    <th>Nomor Handphone</th>  
  </tr>
@foreach ($allCustomer as $customers)
  <tr>
    <td>{{ $customers->nama }}</td>
    <td>{{ $customers->umur }}</td>
    <td>{{ $customers->alamat }}</td>  
    <td>{{ $customers->contact->norumah }}</td>
    <td>{{ $customers->contact->notelpn }}</td>
  </tr> 
@endforeach 
</table>