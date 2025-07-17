/**
 * Content Security Policy (CSP) for CITY GOV OF IMUS project.
 * Add this CSP header in your server configuration or HTML <meta> tag.
 * Adjust sources as needed for your project.
 */

const cspHeader = "Content-Security-Policy: " +
    "default-src 'self'; " +
    "script-src 'self'; " +
    "style-src 'self' 'unsafe-inline'; " +
    "img-src 'self' data:; " +
    "font-src 'self'; " +
    "connect-src 'self'; " +
    "object-src 'none'; " +
    "frame-src 'none'; " +
    "base-uri 'self'; " +
    "form-action 'self';";

module.exports = cspHeader;

// Usage example (Express.js):
// app.use((req, res, next) => {
//   res.setHeader('Content-Security-Policy', cspHeader);
//   next();
// });