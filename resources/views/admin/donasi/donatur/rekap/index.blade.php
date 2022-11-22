<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#c td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0D4C7E;
  color: white;
}
</style>
</head>
<body>
<center>
  <h2>Laporan Donasi</h2>
</center>

<table id="customers">
    <tr> 
        <th>id</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Alamat</th>
        <th>Nominal</th>
        <th>Atas Nama</th>
        <th>No Rekening Donatur</th>
        <th>Keterangan</th>
        <th>Program</th>
        <th>Status</th>
       </tr> 
       @foreach ($donatur as $donasi)
       <tr>
           <td class="text-black">{{ $donasi->id_donatur}}</td>
           <td class="text-black">{{ $donasi->name}}</td>
           <td class="text-black">{{ $donasi->tgl_donasi}}</td>
           <td class="text-black">{{ $donasi->alamat }}</td>
           <td class="text-black">{{ $donasi->nominal }}</td>
           <td class="text-black">{{ $donasi->atas_nama }}</td>
           <td class="text-black">{{ $donasi->no_rekening }}</td>
           <td class="text-black">{{ $donasi->keterangan }}</td>
           <td class="text-black">{{ $donasi->program->nama_program }}</td>
           <td class="text-black">{{ $donasi->status }}</td>
           <td>
       @endforeach  
</table>
</body>
</html>


{{-- <!DOCTYPE html> 
<html> 
<head> 
 	<title>Laporan Donasi</title> 
</head> 
<body> 
 	<style type="text/css">table tr td,table tr th{ font-size: 9pt; } 
 	</style> 
 	<center> 
 	 	<h5>Laporan Donasi</h4> 
 	</center> 
 	<table class='table table-bordered'> 
 	 	<thead> 
 	 	 	<tr> 
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Alamat</th>
                <th>Nominal</th>
                <th>Atas Nama</th>
                <th>No Rekening Donatur</th>
                <th>Keterangan</th>
                <th>Status</th>
 	 	 	</tr> 
 	 	</thead> 
 	 	<tbody>
            @foreach ($donatur as $donasi)
            <tr>
                <td class="text-black">{{ $donasi->id_donatur}}</td>
                <td class="text-black">{{ $donasi->name}}</td>
                <td class="text-black">{{ $donasi->tgl_donasi}}</td>
                <td class="text-black">{{ $donasi->alamat }}</td>
                <td class="text-black">{{ $donasi->nominal }}</td>
                <td class="text-black">{{ $donasi->atas_nama }}</td>
                <td class="text-black">{{ $donasi->no_rekening }}</td>
                <td class="text-black">{{ $donasi->keterangan }}</td>
                <!-- <td><img width="100px" height="100px" src="{{asset('storage/'.$donasi->bukti_tf)}}"></td> -->
                <td class="text-black">{{ $donasi->status }}</td>
                <td>
            @endforeach  
            </tbody>
 	</table> 
  
</body> 
</html> --}}
 