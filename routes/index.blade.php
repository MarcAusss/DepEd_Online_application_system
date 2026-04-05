@foreach($jobs as $job)
    <h2>{{ $job->title }}</h2>
    <p>{{ $job->description }}</p>
    <p>{{ $job->location }}</p>
@endforeach