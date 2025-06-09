<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
     <h1>Job board</h1>
     <h1>my name is <span style="font-size: 20px;">{{ $name }}</span></h1>
     @foreach ($jobs as $job)
      <div>Job title : {{ $job["title"] }} with {{ $job["salary"] }} per M</div>        
     @endforeach
</div> 
