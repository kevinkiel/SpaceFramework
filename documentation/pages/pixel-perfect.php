<html>
<head>
	<title>Space Framework examples</title>
	<link rel="stylesheet" href="../dist/css/style.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600" rel="stylesheet">
</head>
<body>
<div class="main-header">
	<div class="container">
		<div class="block-padding-vertical">
			<h1 class="hero-title"><span class="title">SpaceFramework</span> <br>Documentation</h1>
		</div>
	</div>
</div>
<div class="container">
	<h2>Pixel perfect</h2>
	<p>The 'pixel perfect' lifts up typography alignments differences between defined padding and margins.</p>
	<h3>Requirements</h3>
	<p>The following features are required for this feature:</p>
	<ul>
		<li>Font-Size</li>
		<li>Line-Height</li>
	</ul>
</div>
<div class="bg-raster">
	<div class="container">
		<div class="site-margin-vertical">
			<h3>situation before</h3>
			<div class="block-padding bg-padding">
				<div class="bg-white bg-overflow">
					<h1>Örnare Commodo Cras Porta Adipiscing</h1>
				</div>
			</div>
			<h3>situation after <code>class="pixel-perfect"</code></h3>
			<div class="block-padding bg-padding">
				<div class="bg-white bg-overflow pixel-perfect">
					<h1>Örnare Commodo çras Porta Adipisçing</h1>
				</div>
			</div>
			<h3>How did we do it</h3>
			<pre>
h1{
	@include font-size(xlarge);
	@include line-height(small);
	@include pixel-perfect(xlarge,small);
}
			</pre>
		</div>

		<div class="site-margin-vertical">
			<h3>situation before</h3>
			<div class="site-padding bg-padding">
				<div class="bg-white bg-overflow">
					<h1>Ornare Commodo Cras Porta Adipiscing</h1>
					<p>Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
						leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				</div>
			</div>
			<h3>situation after <code>class="pixel-perfect"</code></h3>
			<div class="site-padding bg-padding">
				<div class="bg-white bg-overflow pixel-perfect">
					<h1>Ornare Commodo Cras Porta Adipiscing</h1>
					<p>Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
						leo risus, porta ac consectetur ac, vestibulum at eros.</p>
				</div>
			</div>
			<h3>How did we do it</h3>
			<pre>
h1{
	@include font-size(xlarge);
	@include line-height(small);
	@include pixel-perfect(xlarge,small);
}

p{
	@include font-size(); // uses default
	@include line-height(); // uses default
	@include pixel-perfect(); // uses default
}
			</pre>
		</div>
	</div>
</div>
</body>
</html>