<style>
    .dashboard-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; padding: 20px; font-family: sans-serif; }
    .stat-card { color: white; padding: 15px; border-radius: 4px; position: relative; min-height: 100px; }
    .stat-card h2 { font-size: 32px; margin: 0; }
    .stat-card p { margin: 5px 0; font-weight: bold; font-size: 14px; }
    .more-info { background: rgba(0,0,0,0.1); display: block; text-align: center; padding: 5px; margin: 10px -15px -15px; text-decoration: none; color: white; font-size: 12px; }
    
    .bg-cyan { background-color: #17a2b8; }
    .bg-green { background-color: #28a745; }
    .bg-yellow { background-color: #ffc107; color: #333 !important; }
    .bg-red { background-color: #dc3545; }
</style>

<div class="dashboard-grid">
    <div class="stat-card bg-cyan">
        <p>Services</p>
        <a href="#" class="more-info">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>

    <div class="stat-card bg-green">
        <p>Jobs</p>
        <a href="#" class="more-info">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>

    <div class="stat-card bg-yellow">
        <p>Goods</p>
        <a href="#" class="more-info" style="color:#333">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>

    <div class="stat-card bg-red">
        <p>Exams</p>
        <a href="#" class="more-info">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    
    <div class="stat-card bg-red">
        <p>Users</p>
        <a href="#" class="more-info">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>