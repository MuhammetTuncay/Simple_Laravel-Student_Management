
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Öğrenci listesi</h5>
        <p class="card-text">Sistemdeki öğrencilerle ilgili tüm bilgileri burada bulabilirsiniz.</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Okul No</th>
                <th scope="col">Adı</th>
                <th scope="col">Soyadı</th>
                <th scope="col">Yaşı</th>
                <th scope="col">Özellikleri</th>
                <th scope="col">Operasyonlar</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Düzenle</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






