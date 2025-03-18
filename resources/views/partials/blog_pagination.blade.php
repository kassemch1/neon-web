<div class="d-flex justify-content-center custom-pagination" id="pagination-container">
    {!! $blog->appends(request()->query())->links('pagination::bootstrap-4') !!}
</div>
<style>
    .custom-pagination .page-link {
        color: black; /* Default text color */
        background: linear-gradient(to right, #7F00FF 0%, #E100FF 50%, #7F00FF 100%); /* Gradient background */
        border: 1px solid white; /* White border */
        transition: all 0.3s ease-in-out; /* Smooth transition */
        /*border-radius: 5px; !* Optional: rounded corners *!*/
    }

    .custom-pagination .page-item.disabled .page-link {
        color: gray; /* Disabled button color */
        background: transparent; /* Ensure disabled buttons remain transparent */
    }

    .custom-pagination .page-link:hover {
        background: #E100FF; /* Hover background */
        color: white; /* Hover text color */
        /*border: 1px solid white; !* Keep white border on hover *!*/
    }

    .custom-pagination .page-item.active .page-link {
        background: linear-gradient(to right, #7F00FF 0%, #E100FF 50%, #7F00FF 100%);
        color: transparent; /* Hide solid color */
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; /* Show text with gradient */
        font-weight: bold; /* Make selected number bold */
        /*border: 2px solid white; !* White border for selected item *!*/
        padding: 6px 12px; /* Ensure proper spacing */
        display: inline-block; /* Ensure proper rendering */
    }



</style>

