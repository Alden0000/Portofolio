<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Alden Audy A.</title>
    <style>
        
        :root { 
            --c-teal: #69d2e7; 
            --c-yellow: #f3cd33; 
            --c-orange: #f99d51; 
            --c-red: #f35f5c; 
            --bg-light: #ffffff; 
            --text-dark: #222222;
        }

        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background: var(--bg-light); 
            color: var(--text-dark); 
            margin: 0; 
            padding: 0; 
            min-height: 100vh;
        }

        
        .main-wrapper {
            display: flex;
            min-height: 100vh;
        }

        
        .profile-section {
            flex: 1;
            padding: 60px;
            background: var(--bg-light);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .greeting {
            color: var(--c-teal);
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 0.9em;
            margin-bottom: 20px;
        }

        .profile-section h1 {
            font-size: 5em;
            line-height: 1.1;
            margin: 0 0 20px 0;
            color: var(--text-dark);
        }

        .profile-section h1 span { color: var(--c-teal); }

        .bio {
            line-height: 1.7;
            color: #555;
            font-size: 1.05em;
            margin-bottom: 30px;
            max-width: 95%;
        }

        
        .contact-links {
            margin-bottom: 40px;
            font-size: 0.95em;
        }
        
        .contact-links a {
            color: var(--c-teal);
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        
        .contact-links a:hover { text-decoration: underline; }

        
        .filter-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .btn { 
            background: transparent; 
            color: var(--c-teal); 
            border: 2px solid var(--c-teal);
            padding: 8px 20px; 
            cursor: pointer; 
            border-radius: 30px; 
            font-weight: 600;
            font-size: 0.9em;
            transition: all 0.3s ease;
        }
        
        .btn:hover { background: var(--c-teal); color: white; }

        
        .portfolio-section {
            flex: 1.2;
            background: var(--c-yellow); 
            padding: 60px;
            overflow-y: auto; 
            height: 100vh;
            box-sizing: border-box;
        }

        #project-display { 
            display: flex; 
            flex-direction: column; 
            gap: 25px; 
        }

        
        .card { 
            background: white; 
            padding: 35px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-left: 8px solid var(--c-red); 
            border-radius: 4px;
        }

        .card:nth-child(2n) { border-left-color: var(--c-teal); }
        .card:nth-child(3n) { border-left-color: var(--c-orange); }

        .card h3 { 
            margin-top: 0; 
            color: var(--text-dark); 
            font-size: 1.6em;
            margin-bottom: 12px;
        }

        .card p { color: #666; line-height: 1.6; margin-bottom: 15px; }
        .card .tech-stack { font-size: 0.9em; color: var(--c-orange); font-weight: bold; }

        @media (max-width: 900px) {
            .main-wrapper { flex-direction: column; }
            .profile-section h1 { font-size: 4em; }
            .profile-section, .portfolio-section { padding: 40px 30px; height: auto;}
        }
    </style>
</head>
<body>

<div class="main-wrapper">
    <aside class="profile-section">
        <div class="greeting">HELLO THERE,</div>
        <h1>I'm<br>Alden<span>.</span></h1>
        
        <div class="bio">
            Currently, I'm an Informatics student at Telkom University Purwokerto. I have a strong interest in developing solutions across various domains. 
            My recent academic work involves implementing Genetic Algorithms for classification models, and I also explore the intricacies of tracking data through Digital Forensics. 
            When I'm not coding, I enjoy structuring web layouts and managing version control with Git.
        </div>

        <div class="contact-links">
            <a href="mailto:pokenan000@gmail.com">Email Me</a>
            <a href="https://github.com/Alden0000" target="_blank">GitHub</a>
        </div>

        <div class="filter-nav">
            <button class="btn" onclick="loadContent('all')">All Work</button>
            <button class="btn" onclick="loadContent('ml')">Machine Learning</button>
            <button class="btn" onclick="loadContent('forensic')">Forensics</button>
            <button class="btn" onclick="loadContent('web')">Web Dev</button>
        </div>
    </aside>

    <main class="portfolio-section">
        <div id="project-display">
            <div class="card">
                <h3>Loading Projects...</h3>
                <p>Please wait while the data is being fetched.</p>
            </div>
        </div>
    </main>
</div>

<script src="script.js"></script>
</body>
</html>