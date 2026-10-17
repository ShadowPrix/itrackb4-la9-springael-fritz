# ITRACKB4 LA7 - Movies

Prepared by: Fritz C. Springael

## Q1:
Which column did you make nullable, and why that one and not another?

[Answer - I made is_available the nullable column. When I add a movie I might not know yet if it is available or not, so I can leave it empty (null) instead of forcing true or false. The other columns (title, genre, rating, year) can't be empty because my list page, the filters, and the add form all need them.]


## Q2:
Which step failed first for you, and what did the error say?

[Answer - The first one that failed was when I tried the Tinker create before I had migrated. It said no such table: movies, so I had to run php artisan migrate first. After that, my create still didn't give the mass assignment error at first because Tinker was still using the old version of my model. I had to exit and open Tinker again, and then it showed Add [title] to fillable property to allow mass assignment on [App\Models\Movie].]

## Q3:
You changed no Blade file in Part D, yet your pages still work. Why not?

[Answer - My Blade files only receive $movies and $movie from the controller and don't care where the data came from. I kept the same variable names in the controller, and a model can be read like an array, so things like $movie['title'] in the views still work. The only thing that changed was the source of the data, from the JSON file to the database through Movie::all() and Movie::findOrFail().]