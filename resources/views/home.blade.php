          <h1>ini adalah halaman home</h1>
          <h2>Selamat datang, {{ $name }}. anda adalah {{ $role }}</h2>

{{-- @if($role == 'admin')
<a href="">kehalaman admin</a>
@elseif($role == 'staff')
<a href="">kehalaman gudang</a>
@else
<a href="">kehalaman terserah</a>
@endif --}}
            {{-- @switch($role)
                @case($role == 'admin')
                    <a href="">kehalaman admin</a>
                    @break
                @case($role == 'staff')
                    <a href="">kehalaman staff</a>
                    @break
                @default
                    <a href="">kehalaman apasaja</a>
            @endswitch --}}

            {{-- @for($i = 0; $i < 5; $i++)
            {{ $i }} <br>
            @endfor --}}

            {{-- @foreach ($buah as $data)
                {{ $data }} <br>
            @endforeach --}}

            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                </tr>
                @foreach($buah as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item }}</td>
                </tr>
                @endforeach
            </table>
