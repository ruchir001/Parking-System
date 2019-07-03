% read image
imagen=imread('sample.png');

%PRE-PROCESSING STEPS

% convert to gray scale
c=rgb2gray(imagen);
% show image
figure
imshow(c);

%Noise removal
Kmedian = medfilt2(c);
imshow(Kmedian);

%Sobel and Canny Edge detectors
%Comparison
BW1 = edge(c,'sobel');
BW2 = edge(c,'canny');
figure;
imshowpair(BW1,BW2,'montage')
title('Sobel Operator                                   Canny Operator');
