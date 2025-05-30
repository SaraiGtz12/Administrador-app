$(document).ready(function() {
    // Toggle sidebar en móviles
    $('#sidebarToggleTop').click(function() {
        $('#accordionSidebar').toggleClass('active');
        $('#sidebarOverlay').toggleClass('active');
    });
    
    // Cerrar sidebar al hacer click en el overlay (móviles)
    $('#sidebarOverlay').click(function() {
        $('#accordionSidebar').removeClass('active');
        $('#sidebarOverlay').removeClass('active');
    });
    
    // Mantener funcionalidad original del botón de colapsar sidebar
    $('#sidebarToggle').click(function() {
        if ($(window).width() > 768) {
            // En desktop, colapsa/expande el sidebar
            $('#accordionSidebar').toggleClass('collapsed');
            $('#content-wrapper').toggleClass('expanded');
        }
    });
});