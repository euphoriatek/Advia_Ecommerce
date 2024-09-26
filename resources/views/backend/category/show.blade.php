<!-- resources/views/categories/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->title }}</title>
    <style>
        /* Add some basic styling for better readability */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .category-details {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .category-details img {
            max-width: 100%;
            height: auto;
        }
        .category-details .field {
            margin-bottom: 10px;
        }
        .category-details .field label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="category-details">
        <h1>{{ $category->title }}</h1>
        
        @if($category->photo)
            <!-- Ensure the path is correctly generated -->
            <img src="{{ $category->photo }}" alt="{{ $category->title }}">
      
        @endif
        
        <div class="field">
            <label for="slug">Slug:</label>
            <p>{{ $category->slug }}</p>
        </div>

        <div class="field">
            <label for="summary">Summary:</label>
            <p>{{ $category->summary }}</p>
        </div>

        <div class="field">
            <label for="is_parent">Is Parent:</label>
            <p>{{ $category->is_parent ? 'Yes' : 'No' }}</p>
        </div>

        <div class="field">
            <label for="parent_id">Parent ID:</label>
            <p>{{ $category->parent_id }}</p>
        </div>

        <div class="field">
            <label for="added_by">Added By:</label>
            <p>{{ $category->added_by }}</p>
        </div>

        <div class="field">
            <label for="status">Status:</label>
            <p>{{ $category->status }}</p>
        </div>

        <div class="field">
            <label for="created_at">Created At:</label>
            <p>{{ $category->created_at }}</p>
        </div>

        <div class="field">
            <label for="updated_at">Updated At:</label>
            <p>{{ $category->updated_at }}</p>
        </div>
    </div>
</body>
</html>
