<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1.0, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <title>Create Project</title>
</head>
<body>
    <form method="POST" action="/projects" class="container" style="padding-top: 40px;">
        @csrf
        <h1 class="heading is-1">Create a Project</h1>
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
              <input name="title" class="input" type="text" placeholder="Text input">
            </div>
          </div>

          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <textarea name="description" class="textarea" placeholder="Textarea"></textarea>
            </div>
          </div>
        
          
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Create Project</button>
            </div>
          </div>
    </form>
</body>
</html>