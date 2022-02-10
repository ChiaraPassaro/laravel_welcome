{{-- @php
$classes = [1,2,3,4];
dd($students)
@endphp --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="{{ route('contact') }}">Contatti</a>
  <h1>Home</h1>

  {{-- @dd($students, $teacher) --}}
  @foreach($students as $student)
  <h2>{{ $student['name'] }}</h2>
  @if(count($student['cats']) > 0)
  <ul>
    <li>
      {{ $student['cats'][0] }}
    </li>
  </ul>
  @endif
  @endforeach

  @forelse($students[1]['cats'] as $cat)
  {{ $cat }}
  @empty
  Nessun gatto
  @endforelse


</body>

</html>