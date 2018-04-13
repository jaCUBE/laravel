<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Archives</h5>
  <div class="card-body">
    <ul>
      @foreach($archives as $stats)
        <li>
          <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
            {{ $stats['month'] }} {{ $stats['year'] }}
            <span class="badge badge-primary">{{  $stats['published'] }}</span>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>