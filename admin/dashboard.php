<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle project operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $stmt = $pdo->prepare("INSERT INTO projects (title, description, image_url, technologies) VALUES (?, ?, ?, ?)");
                $stmt->execute([$_POST['title'], $_POST['description'], $_POST['image_url'], $_POST['technologies']]);
                break;
                
            case 'update':
                $stmt = $pdo->prepare("UPDATE projects SET title=?, description=?, image_url=?, technologies=? WHERE id=?");
                $stmt->execute([$_POST['title'], $_POST['description'], $_POST['image_url'], $_POST['technologies'], $_POST['id']]);
                break;
                
            case 'delete':
                $stmt = $pdo->prepare("DELETE FROM projects WHERE id=?");
                $stmt->execute([$_POST['id']]);
                break;
        }
    }
}

// Fetch all projects
$stmt = $pdo->query("SELECT * FROM projects");
$projects = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Admin Dashboard</title>
    <link rel="stylesheet" href="../portifolio.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="admin-container">
        <nav class="admin-nav">
            <h2>Portfolio Admin</h2>
            <ul>
                <li><a href="#projects" class="active">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        
        <main class="admin-content">
            <section id="projects" class="admin-section">
                <h2>Manage Projects</h2>
                
                <!-- Add Project Form -->
                <form method="POST" class="admin-form">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="id" value="">  <!-- Add this line -->
                    <div class="form-group">
                        <label for="title">Project Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image_url">Image URL</label>
                        <input type="text" id="image_url" name="image_url" required>
                    </div>
                    <div class="form-group">
                        <label for="technologies">Technologies (comma-separated)</label>
                        <input type="text" id="technologies" name="technologies" required>
                    </div>
                    <button type="submit" class="btn btn--1">Add Project</button>
                </form>
                
                <!-- Projects List -->
                <div class="projects-list">
                    <?php foreach ($projects as $project): ?>
                    <div class="project-item">
                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <div class="project-actions">
                            <button onclick='editProject(<?= $project["id"] ?>, <?= json_encode(htmlspecialchars($project["title"])) ?>, <?= json_encode(htmlspecialchars($project["description"])) ?>, <?= json_encode(htmlspecialchars($project["image_url"])) ?>, <?= json_encode(htmlspecialchars($project["technologies"])) ?>)' class="btn btn--2">Edit</button>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= $project['id'] ?>">
                                <button type="submit" class="btn btn--1" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

        
        </main>
    </div>
    
    <script>
        function editProject(id, title, description, image_url, technologies) {
            // Fill the form with project data
            document.querySelector('input[name="action"]').value = 'update';
            document.querySelector('input[name="id"]').value = id;  // Update this line
            document.querySelector('input[name="title"]').value = title;
            document.querySelector('textarea[name="description"]').value = description;
            document.querySelector('input[name="image_url"]').value = image_url;
            document.querySelector('input[name="technologies"]').value = technologies;
            
            // Change button text
            document.querySelector('.admin-form button').textContent = 'Update Project';
            
            // Scroll to form
            document.querySelector('.admin-form').scrollIntoView({ behavior: 'smooth' });
        }

        // Modified form reset functionality
        document.querySelector('.admin-form').addEventListener('submit', function(e) {
            const isUpdate = document.querySelector('input[name="action"]').value === 'update';
            
            if (!isUpdate) {
                setTimeout(() => {
                    this.reset();
                    document.querySelector('input[name="action"]').value = 'add';
                    document.querySelector('input[name="id"]').value = '';  // Add this line
                    document.querySelector('.admin-form button').textContent = 'Add Project';
                }, 100);
            }
        });
    </script>

</body>
</html>