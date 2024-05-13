<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Tugas P19</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
          <a class="nav-link {{ ($title === "devices") ? 'active' : '' }}" href="/devices">Devices</a>
          <a class="nav-link {{ ($title === "rules") ? 'active' : '' }}" href="/rules">Rules</a>
          <a class="nav-link {{ ($title === "users") ? 'active' : '' }}" href="/users">Users</a>
        </div>
      </div>
    </div>
</nav>