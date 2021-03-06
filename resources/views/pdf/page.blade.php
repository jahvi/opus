<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		* {
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		    word-wrap: break-word;
		    font-size: 16px;
		    line-height: 1.5;
		}

		body>*:first-child {
		    margin-top: 0 !important;
		}

		h1 {
		    font-size: 2em;
		}

		h2 {
		    font-size: 1.5em;
		}

		h3 {
		    font-size: 1.25em;
		}

		hr {
		    border: none;
			border-bottom: 1px solid #eaecef;
			margin: 8px 0px 8px 0px;
		}

		h1, h2, h3, h4, h5, h6 {
		    margin-top: 24px;
		    margin-bottom: 12px;
		    font-weight: 600;
		    line-height: 1.25;
		}

		p, blockquote, ul, ol, dl, table, pre {
		    margin-top: 0;
		    margin-bottom: 16px;
		}

		blockquote {
		    padding: 0 1em;
		    color: #6a737d;
		    border-left: 0.25em solid #dfe2e5;
		}

		p, blockquote, ul, ol, dl, table, pre {
		    margin-top: 0;
		    margin-bottom: 16px;
		}

		blockquote {
		    margin: 0;
		}

		b, strong {
			font-weight: 500;
		}

		pre {
		    padding: 16px;
		    overflow: auto;
		    font-size: 85%;
		    line-height: 1.45;
		    background-color: #f6f8fa;
		    border-radius: 3px;
		    margin-bottom: 16px;
		}

		pre, code {
		    word-wrap: normal;
			font-size: 14px;
			font-family: "Consolas", "Monaco", "SFMono-Regular", "Liberation Mono", Menlo, Courier, monospace;
		}

		ul, ol {
		    padding-left: 2em;
		}

		body::after {
		    display: table;
		    clear: both;
		    content: "";
		}

		a {
		    color: #0366d6;
		    text-decoration: none;
		}

		a:hover {
		    text-decoration: underline;
		}
	</style>
</head>
<body>
	@if(isset($wiki))
		{!! $wiki->description !!}
	@else
		{!! $page->description !!}
	@endif
</body>
</html>