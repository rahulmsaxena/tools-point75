<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point75 Tools | Quantitative Infrastructure & Macro Analytics</title>
    
    <!-- PWA Meta Tags -->
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#0f172a">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Point75 Tools">
    
    <!-- Tailwind CSS CDN for rapid, clean styling matching a sophisticated financial aesthetic -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#0b0f19',
                            card: '#131c2e',
                            border: '#1e293b',
                            accent: '#3b82f6',
                            text: '#f8fafc',
                            muted: '#94a3b8'
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-brand-dark text-brand-text min-h-screen flex flex-col justify-between selection:bg-blue-500 selection:text-white">

    <!-- Header / Nav -->
    <header class="border-b border-brand-border bg-brand-dark/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <!-- Brand Logo / Identity -->
                <div class="h-8 w-8 rounded bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center font-bold text-white tracking-wider">
                    75
                </div>
                <span class="font-semibold text-lg tracking-tight">Point75 <span class="text-blue-500 font-normal text-sm ml-1 px-2 py-0.5 rounded bg-blue-500/10 border border-blue-500/20">Tools</span></span>
            </div>
            <nav class="flex items-center space-x-6 text-sm">
                <a href="https://point75.io" class="text-brand-muted hover:text-brand-text transition-colors">Editorial Hub</a>
                <span class="text-brand-border">|</span>
                <button onclick="openContactModal()" class="text-brand-muted hover:text-brand-text transition-colors">Contact Me</button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-grow">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12 text-center">
            <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-medium mb-6">
                <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                <span>Live Quantitative Infrastructure & Public Data Pipeline</span>
            </div>
            <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-white max-w-3xl mx-auto leading-tight">
                Quantitative Infrastructure & Macro Tools
            </h1>
            <p class="mt-4 text-lg text-brand-muted max-w-2xl mx-auto font-light">
                Data-driven calculators, rigorous 5-year asset backtesting, and automated public Treasury intelligence built for clarity.
            </p>
        </section>

        <!-- Tool Cards Grid -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Card 1: Portfolio Builder -->
                <a href="/portfolio-builder" class="group relative bg-brand-card border border-brand-border rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 mb-4 group-hover:scale-105 transition-transform">
                            📈
                        </div>
                        <h2 class="text-xl font-semibold text-white group-hover:text-blue-400 transition-colors">Portfolio Builder & 5-Year Backtester</h2>
                        <p class="mt-2 text-sm text-brand-muted leading-relaxed">
                            Asset allocation engine computing annualized returns, volatility, and Sharpe ratios with strict 5-year data integrity enforcement.
                        </p>
                    </div>
                    <div class="mt-6 flex items-center text-sm font-medium text-blue-400">
                        <span>Launch Tool</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <!-- Card 2: Fee Shock Calculator -->
                <a href="/advisors" class="group relative bg-brand-card border border-brand-border rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 mb-4 group-hover:scale-105 transition-transform">
                            🛡️
                        </div>
                        <h2 class="text-xl font-semibold text-white group-hover:text-blue-400 transition-colors">Advisor Fee "Shock" Calculator</h2>
                        <p class="mt-2 text-sm text-brand-muted leading-relaxed">
                            Expose the long-term wealth drag of traditional 1% management fees versus low-cost DIY approaches using SEC Form ADV schedule data.
                        </p>
                    </div>
                    <div class="mt-6 flex items-center text-sm font-medium text-blue-400">
                        <span>Launch Tool</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <!-- Card 3: Daily Bond Summary -->
                <a href="/bond_summary" class="group relative bg-brand-card border border-brand-border rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 mb-4 group-hover:scale-105 transition-transform">
                            📊
                        </div>
                        <h2 class="text-xl font-semibold text-white group-hover:text-blue-400 transition-colors">Daily Bond & Yield Curve Summary</h2>
                        <p class="mt-2 text-sm text-brand-muted leading-relaxed">
                            Automated daily FRED API insights tracking constant-maturity Treasuries, SOFR rates, and short-end yield curve dynamics.
                        </p>
                    </div>
                    <div class="mt-6 flex items-center text-sm font-medium text-blue-400">
                        <span>View Summary</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>

                <!-- Card 4: Retirement Guide -->
                <a href="/education/retirement-accounts" class="group relative bg-brand-card border border-brand-border rounded-xl p-6 hover:border-blue-500/50 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 mb-4 group-hover:scale-105 transition-transform">
                            💡
                        </div>
                        <h2 class="text-xl font-semibold text-white group-hover:text-blue-400 transition-colors">Plain-English Retirement Guide</h2>
                        <p class="mt-2 text-sm text-brand-muted leading-relaxed">
                            Jargon-free breakdown of Pre-Tax vs. Roth structures, workplace accounts, and individual contribution limits.
                        </p>
                    </div>
                    <div class="mt-6 flex items-center text-sm font-medium text-blue-400">
                        <span>Read Guides</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-brand-border bg-brand-dark py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-brand-muted">
            <div>
                &copy; <?php echo date('Y'); ?> Point75 Tools. All rights reserved. Built for analytical rigor.
            </div>
            <div class="flex items-center space-x-6">
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center space-x-1">
                    <span>Instagram</span>
                </a>
                <button onclick="openContactModal()" class="hover:text-white transition-colors">Contact Me</button>
            </div>
        </div>
    </footer>

    <!-- Contact Modal Placeholder -->
    <div id="contactModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden items-center justify-center z-50 px-4">
        <div class="bg-brand-card border border-brand-border rounded-xl max-w-md w-full p-6 relative">
            <button onclick="closeContactModal()" class="absolute top-4 right-4 text-brand-muted hover:text-white">&times;</button>
            <h3 class="text-lg font-semibold text-white mb-2">Get in Touch</h3>
            <p class="text-sm text-brand-muted mb-4">Have feedback or inquiries regarding the quantitative models? Drop a message.</p>
            <form onsubmit="handleContact(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-brand-muted mb-1">Your Email</label>
                    <input type="email" required class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-xs font-medium text-brand-muted mb-1">Message</label>
                    <textarea rows="3" required class="w-full bg-brand-dark border border-brand-border rounded px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium py-2 rounded text-sm transition-colors">Send Message</button>
            </form>
        </div>
    </div>

    <script>
        function openContactModal() {
            document.getElementById('contactModal').classList.remove('hidden');
            document.getElementById('contactModal').classList.add('flex');
        }
        function closeContactModal() {
            document.getElementById('contactModal').classList.remove('flex');
            document.getElementById('contactModal').classList.add('hidden');
        }
        function handleContact(e) {
            e.preventDefault();
            alert('Thank you! Your message has been sent.');
            closeContactModal();
        }
    </script>
</body>
</html>