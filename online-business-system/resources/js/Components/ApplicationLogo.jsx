export default function ApplicationLogo({
    className = '',
    alt = 'Inprotech Solutions — Solutions That Empower',
    ...props
}) {
    return (
        <img
            src="/images/logo.png"
            alt={alt}
            className={`w-36 h-auto object-contain ${className}`}
            loading="lazy"
            decoding="async"
            {...props}
        />
    );
}
