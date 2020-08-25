# aMAZing Adventure

## Objective
For this assignment you will be demonstrating your skills and understanding of using multidimensional, associative arrays, conditional statements and retrieving variables from the url to create an interactive maze.

## Requirements
The following requirement must be met in order to complete the assignment successfully: 

1. Clone this repository from GitHub and use the provided files to complete the assignment.
2. Convert the **index.html** file to be a PHP file.
    1. Update the file extension
    2. Uses the provide HTML as a template
3. Review the provided maze (maze.pdf) 
    1. The maze contains 9 rooms
    2. The arrows indicate entrances and exits into each room. Entering one room does not guarantee that you can return the way you came.
4. Create an multi-dimensional, associative array for the maze
    1. Each room should be represented as an array 
    2. Each room should include a description
    3. Each room should include a list of available actions
5. Each room's description will be displayed inside `<div class="response"></div>`
6. Each action will displayed inside `<div class="actions"></div>` as link to another room
    1. Use URL variables to pass the room key
    2. Use the `$_GET` variable to retrieve the room from the maze array
    3. Display the new room's description and actions
