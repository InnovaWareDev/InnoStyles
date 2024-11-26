import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Function to apply the ripple effect
    function applyRippleEffect() {
        document.querySelectorAll('.ripple').forEach(button => {
            // Ensure the button isn't already having the event listener
            if (!button.hasAttribute('data-ripple-applied')) {
                button.addEventListener('mousedown', function (e) {
                    const rect = button.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    // Create ripple element
                    const ripple = document.createElement('span');
                    ripple.style.width = ripple.style.height = `${size}px`;
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    ripple.classList.add('ripple-effect');

                    // Add ripple to the button
                    button.appendChild(ripple);

                    // Remove ripple after animation
                    setTimeout(() => {
                        ripple.remove();
                    }, 600); // Match the duration of the CSS animation
                });

                // Add "clicked" effect on mouse down
                button.addEventListener('mousedown', function () {
                    button.classList.add('clicked');
                });

                // Remove "clicked" effect on mouse up or mouse leave
                button.addEventListener('mouseup', function () {
                    button.classList.remove('clicked');
                });
                button.addEventListener('mouseleave', function () {
                    button.classList.remove('clicked');
                });

                // Mark that the ripple has been applied to avoid duplicate listeners
                button.setAttribute('data-ripple-applied', 'true');
            }
        });
    }

    // Apply ripple effect after the page loads and categories are rendered
    applyRippleEffect();
});
