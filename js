function confirmLink(event) {
    if (!confirm("Do you want to proceed to this link?")) {
        event.preventDefault(); // Prevents the default action (navigating to the link) if the user clicks "Cancel"
    }
}
