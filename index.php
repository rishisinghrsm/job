<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Design</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        /* CSS Reset and Basic Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e3eafc;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background-color: #dbeafe;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo-placeholder {
            width: 150px;
            height: 40px;
            background-color: #c4b5fd;
            border-radius: 8px;
        }

        .search-bar {
            flex-grow: 1;
            margin: 0 40px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid #c7d2fe;
            border-radius: 20px;
            background-color: #fff;
            font-size: 14px;
        }

        .search-bar .material-symbols-outlined {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        
        .header-nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #4f46e5;
            font-weight: 500;
        }

        /* Main Content Layout */
        .main-content {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 20px;
        }

        /* Sidebar (Filters) */
        .sidebar {
            background-color: #eff6ff;
            border-radius: 15px;
            padding: 20px;
        }

        .location-selector {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            padding: 10px 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #d1d5db;
        }
        
        .location-selector span {
            font-weight: 600;
        }

        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .filter-header h3 {
            font-size: 16px;
            font-weight: 600;
        }

        .select-all {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #6b7280;
        }

        .filter-group {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .filter-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .filter-item:last-child {
            margin-bottom: 0;
        }
        
        /* Custom Checkbox */
        .custom-checkbox {
            appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid #a5b4fc;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            background-color: #f0f2f5;
        }

        .custom-checkbox:checked {
            background-color: #6366f1;
            border-color: #6366f1;
        }

        .custom-checkbox:checked::after {
            content: '✔';
            color: white;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
        }
        

        /* Notifications Panel */
        .notifications-panel {
            background-color: #eff6ff;
            border-radius: 15px;
            padding: 20px;
        }

        .tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .tab {
            padding: 8px 20px;
            background-color: #fff;
            border: 1px solid #d1d5db;
            color: #4b5563;
            cursor: pointer;
            font-weight: 500;
        }

        .tab:first-child {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        
        .tab:last-child {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .tab.active {
            background-color: #4f46e5;
            color: #fff;
            border-color: #4f46e5;
        }

        .notification-bell {
            margin-left: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #4f46e5;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            font-size: 16px;
        }
        
        /* Notification Card Styles */
        .notification-list .card {
            display: flex;
            background-color: #4b5563;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            color: #fff;
            gap: 20px;
            align-items: center;
        }

        .card-image-placeholder {
            width: 100px;
            height: 100px;
            background-color: #374151;
            border-radius: 10px;
            flex-shrink: 0;
        }

        .card-details {
            flex-grow: 1;
        }
        
        .card-details h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .card-info {
            font-size: 12px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px;
            color: #d1d5db;
            margin-bottom: 10px;
        }
        
        .card-info span {
            white-space: nowrap;
        }

        .card-tags span {
            display: inline-block;
            background-color: #312e81;
            color: #c7d2fe;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 11px;
            margin-right: 5px;
        }

        .card-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }
        
        .days-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #374151;
            padding: 10px;
            border-radius: 10px;
            width: 100px;
        }
        
        .days-left .material-symbols-outlined {
            font-size: 28px;
        }

        .days-left span {
            font-size: 12px;
            font-weight: 500;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }
        
        .action-btn {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 8px 12px;
            border: none;
            border-radius: 8px;
            background-color: #6b7280;
            color: #fff;
            cursor: pointer;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
            <div class="logo-placeholder"></div>
            <div class="search-bar">
                <span class="material-symbols-outlined">search</span>
                <input type="text" placeholder="Hinted search text">
            </div>
            <nav class="header-nav">
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </nav>
        </header>

        <main class="main-content">
            <aside class="sidebar">
                <div class="location-selector">
                    <span>Location</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </div>

                <div class="filter-header">
                    <h3>Filter</h3>
                    <div class="select-all">Select all <input type="checkbox" class="custom-checkbox" style="margin-left: 5px;"></div>
                </div>

                <div class="filter-group">
                    <div class="filter-item">
                        <label for="public-sector">Public Sector</label>
                        <input type="checkbox" id="public-sector" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="private-sector">Private Sector</label>
                        <input type="checkbox" id="private-sector" class="custom-checkbox">
                    </div>
                </div>
                
                <div class="filter-group">
                    <div class="filter-item">
                        <label for="central-gov">Central Government</label>
                        <input type="checkbox" id="central-gov" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="state-gov">State Government</label>
                        <input type="checkbox" id="state-gov" class="custom-checkbox">
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-item">
                        <label for="civil-court">Civil Court</label>
                        <input type="checkbox" id="civil-court" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="high-court">High Court</label>
                        <input type="checkbox" id="high-court" class="custom-checkbox">
                    </div>
                </div>
                
                <div class="filter-group">
                    <div class="filter-item">
                        <label for="navy">Navy</label>
                        <input type="checkbox" id="navy" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="army">Army</label>
                        <input type="checkbox" id="army" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="airforce">Airforce</label>
                        <input type="checkbox" id="airforce" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="police">Police</label>
                        <input type="checkbox" id="police" class="custom-checkbox">
                    </div>
                </div>
                
                 <div class="filter-group">
                    <div class="filter-item">
                        <label for="teaching">Teaching</label>
                        <input type="checkbox" id="teaching" class="custom-checkbox">
                    </div>
                    <div class="filter-item">
                        <label for="non-teaching">Non Teaching</label>
                        <input type="checkbox" id="non-teaching" class="custom-checkbox">
                    </div>
                </div>

            </aside>

            <section class="notifications-panel">
                <div class="tabs">
                    <div class="tab active">Latest Notification <span class="notification-bell material-symbols-outlined">notifications</span></div>
                    <div class="tab">Admit Card</div>
                    <div class="tab">Result</div>
                </div>

                <div class="notification-list">
                    <article class="card">
                        <div class="card-image-placeholder"></div>
                        <div class="card-details">
                            <h4>Jharkhand JHC Assistant/C...</h4>
                            <div class="card-info">
                                <span>Total Vacancy - 410</span>
                                <span>Total Vacancy - 410</span>
                                <span>Post Date: 12-April-2024</span>
                                <span>Post Date: 12-April-2024</span>
                            </div>
                            <div class="card-tags">
                                <span>State Government</span>
                                <span>Civil/High Court</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="days-left">
                                <span class="material-symbols-outlined">person_add</span>
                                <span>19 Days Left</span>
                            </div>
                            <div class="action-buttons">
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">person_add</span>Registration</button>
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">description</span>Admit Card</button>
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">workspace_premium</span>Result</button>
                            </div>
                        </div>
                    </article>
                    
                    <article class="card">
                        <div class="card-image-placeholder"></div>
                        <div class="card-details">
                            <h4>Jharkhand JHC Assistant/C...</h4>
                            <div class="card-info">
                                <span>Total Vacancy - 410</span>
                                <span>Total Vacancy - 410</span>
                                <span>Post Date: 12-April-2024</span>
                                <span>Post Date: 12-April-2024</span>
                            </div>
                            <div class="card-tags">
                                <span>State Government</span>
                                <span>Civil/High Court</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="days-left">
                                <span class="material-symbols-outlined">person_add</span>
                                <span>19 Days Left</span>
                            </div>
                            <div class="action-buttons">
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">person_add</span>Registration</button>
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">description</span>Admit Card</button>
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">workspace_premium</span>Result</button>
                            </div>
                        </div>
                    </article>

                    <article class="card">
                        <div class="card-image-placeholder"></div>
                        <div class="card-details">
                            <h4>Jharkhand JHC Assistant/C...</h4>
                            <div class="card-info">
                                <span>Total Vacancy - 410</span>
                                <span>Total Vacancy - 410</span>
                                <span>Post Date: 12-April-2024</span>
                                <span>Post Date: 12-April-2024</span>
                            </div>
                            <div class="card-tags">
                                <span>State Government</span>
                                <span>Civil/High Court</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <div class="days-left">
                                <span class="material-symbols-outlined">person_add</span>
                                <span>19 Days Left</span>
                            </div>
                            <div class="action-buttons">
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">person_add</span>Registration</button>
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">description</span>Admit Card</button>
                                <button class="action-btn"><span class="material-symbols-outlined" style="font-size: 16px;">workspace_premium</span>Result</button>
                            </div>
                        </div>
                    </article>
                    
                </div>
            </section>
        </main>
    </div>

</body>
</html>