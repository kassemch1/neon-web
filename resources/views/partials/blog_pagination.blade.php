<div class="d-flex justify-content-center custom-pagination" id="pagination-container">
    {!! $blog->appends(request()->query())->links('pagination::bootstrap-4') !!}
</div>
<style>
.custom-pagination .page-link {
    color: black; /* Color for the page numbers */
}

.custom-pagination .page-item.disabled .page-link {
    color: gray; /* Color for disabled button (previous/next when at first/last page) */
}

.custom-pagination .page-link:hover {
    background-color: #E100FF; /* Background color when hovering over a button */
    color: white; /* Text color on hover */
}

.custom-pagination .page-item.active .page-link {
    background-color: #E100FF; /* Active button color */
    color: white; /* Active button text color */
}


    </style>

